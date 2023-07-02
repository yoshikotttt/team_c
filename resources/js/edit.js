import { getAll, getOne, create } from "./api.js";
// 【備忘】性格を書き替えるのではなく、別テーブルへ追加するのでここではcreateの関数を使用

const params = new URLSearchParams(window.location.search);
const idParam = params.get("id");
const id = parseInt(idParam.split("?")[0]);
const s = parseInt(idParam.split("?")[1]);

console.log(id);
console.log(s);
const testid = isNaN(id);
const tests = isNaN(s);
console.log(testid);
console.log(tests);

let backbtn = "";
backbtn += `<button onclick="location.href='detail_edit?id=${id}?${s}'" type="button" class="btn btn-primary">
    戻る
</button>`;
document.querySelector("#backbtn").innerHTML = backbtn;

let output = "";
output += `<input id="user_id" type="hidden" name="user_id" value=${id} />`;
// output += `<p>${id}</p>`;
document.querySelector("#userId").innerHTML = output;

let output1 = "";
output1 += `<input id="sentence_id" type="hidden" name="sentence_id" value=${s} />`;
// output1 += `<p>${s}</p>`;
document.querySelector("#sentenceId").innerHTML = output1;

getOne("users", id).then((user) => {
    console.log(user);
    let output = "";
    output += `${user.name}さん`;
    document.querySelector("#username").innerHTML = output;
});

getAll("sentences").then((sentences) => {
    // console.log(sentences);
    let output = "";
    sentences.forEach((item) => {
        if (s == item.id) {
            // 比較演算子を修正

            // 条件に一致した場合の処理を追加
            output += `<p>${item.content}</p>`;
        }
    });

    document.querySelector("#select").innerHTML = output;
});

document
    .getElementById("editForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        // let user_id = document.getElementById("user_id").value;
        // let sentence_id = document.getElementById("sentence_id").value;
        // let edit_user_id = document.getElementById("edit_user_id").value;

        let user_id = parseInt(document.getElementById("user_id").value, 10);
        let sentence_id = parseInt(
            document.getElementById("sentence_id").value,
            10
        );
        let edit_user_id = parseInt(
            document.getElementById("edit_user_id").value,
            10
        );
        let content = document.getElementById("content").value;

        if (!user_id || !sentence_id || !edit_user_id || !content) {
            alert("Please fill in all required fields.");
            console.log(user_id);
            console.log(sentence_id);
            console.log(edit_user_id);
            console.log(content);
            return;
        }

        let data = {
            user_id: user_id,
            sentence_id: sentence_id,
            edit_user_id: edit_user_id,
            content: content,
        };

        create("edit", data).then((newSentence) => {
            console.log("Success:", newSentence);
            alert("edit created successfully");
            window.location.href = `detail_edit?id=${id}?${s}`;
        });
    });
