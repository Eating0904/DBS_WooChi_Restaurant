// let RATE = [
//     {"name":'Eating1',"star":'1',"content":'AAA',"reply":'ㄅㄅㄅ'},
//     {"name":'Eating2',"star":'2',"content":'BBB',"reply":'ㄆㄆㄆ'},
//     {"name":'Eating3',"star":'3',"content":'CCC',"reply":'ㄇㄇㄇ'},
//     {"name":'Eating4',"star":'4',"content":'DDD',"reply":'ㄉㄉㄉ'},
//     {"name":'Eating5',"star":'5',"content":'EEE',"reply":'ㄌㄌㄌ'},
// ]
function postRate() {
    $.post(
        "../php/show_rate.php",
        "",
        (response, status) => {
            if (status == "success") {
                console.log(response);
                if (response["status"] == "success") {
                    let RATE = response["data"];
                    // console.log(RATE)
                    putRate(RATE);
                }
            }
        }
    )
}

function putRate(RATE) {
    let star = document.getElementById("rateContent")
    for(let i=0; i<RATE.length;i++){
        let content = `<div class="card w-75">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <h5 class="card-title">${RATE[i]["name"]}</h5>
                                    </div>
                                    <div class="col-9">
                                        <div id="stars">
                                            <form action="">
                                                <input class="star star-5" id="star-5-${i}" type="radio" name="star" value="5">
                                                <label class="star star-5" for="star-5-${i}"></label>
                                                <input class="star star-4" id="star-4-${i}" type="radio" name="star" value="4">
                                                <label class="star star-4" for="star-4-${i}"></label>
                                                <input class="star star-3" id="star-3-${i}" type="radio" name="star" value="3">
                                                <label class="star star-3" for="star-3-${i}"></label>
                                                <input class="star star-2" id="star-2-${i}" type="radio" name="star" value="2">
                                                <label class="star star-2" for="star-2-${i}"></label>
                                                <input class="star star-1" id="star-1-${i}" type="radio" name="star" value="1">
                                                <label class="star star-1" for="star-1-${i}"></label>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                                <hr>
                                <p class="card-text" name="ratecontent">${RATE[i]["content"]}</p>
                                <p class="card-text" name="ratecontent">WooChi : ${RATE[i]["r_reply"]}</p>
                                <!-- 店家才有 -->
                                <button type="button" class="btn btn-primary btn-sm" id="hide" onclick="showReplyBox(${RATE[i]["r_id"]})">回覆</button>
                                <!-- 點了回覆之後 -->
                                <div class="hide" id="hide-${RATE[i]["r_id"]}">
                                    <div class="card w-75">
                                        <div class="card-body">
                                            <h5 class="card-title" >給予回覆</h5>
                                            <p class="card-text">
                                                <textarea class="text" placeholder="輸入回覆內容!" id="reply_rate"></textarea>   
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm" onclick="closeReplyBox(${RATE[i]["r_id"]})">取消</button>
                                            <button type="button" class="btn btn-primary btn-sm" onclick="closeReplyBox(${RATE[i]["r_id"]});giveReply(${RATE[i]["r_id"]})">發送</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
        star.innerHTML += content;
        setTimeout(
            function() {
                $(`#star-${RATE[i]["score"]}-${i}`).prop("checked", true)
            },
        );
    }
}
function giveRate() {
    let url = "../php/insert_rate.php";
    let data = {
        "star" : $('input[name=star]:checked').val(),
        "content" : $("#giveContent").val()
    }
    // console.log(data);
    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    alert("評論成功");
                    window.location.reload();
                }
            }
        }
    )
}

function giveReply(id) {
    let url = "../php/reply_rate.php";
    let data = {
        "r_id" : id,
        "content" : $("#reply_rate").val()
    }
    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    alert("回覆成功")
                    window.location.reload();
                }
            }
        }
    )
}



function showRateBox() {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementsByClassName("hide")[0].style.display = "block";
}
function closeRateBox() {
    // document.getElementsByClassName("cover")[0].style.display = "none";
    document.getElementsByClassName("hide")[0].style.display = "none";
}

function showReplyBox(id) {
    // document.getElementsByClassName("cover")[0].style.display = "block";
    document.getElementById(`hide-${id}`).style.display = "block";
}
function closeReplyBox(id) {
    // document.getElementsByClassName("cover")[0].style.display = "none";
    document.getElementById(`hide-${id}`).style.display = "none";
}

window.onload = function() {
    postRate();
    $("#giveRate").click(() => {
        // console.log("click");
        giveRate();
    })
}