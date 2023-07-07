import { getAll, remove, getOne } from "./api.js";

// const params = new URLSearchParams(window.location.search);
// const id = params.get('id');
// const id = 1;

const element = document.getElementById("type");
const personalityId = element.dataset.personalityId;
// console.log(personalityId);

getAll("personalities").then((personalities) => {
    // console.log(personalityId);
    // console.log(personalities);
    let output = ""; // output変数を外側に定義

    personalities.forEach((item) => {
        // console.log(item.id);
        if (personalityId == item.id) {
            // 比較演算子を修正
            // 条件に一致した場合の処理を追加
            output += `<div>`;
            output += `<h2>${item.name}</h2>`;
            output += `</div >`;
        }

        // output変数の内容をHTMLに挿入
        document.querySelector("#personality").innerHTML = output;
    });

    getAll("sentences").then((sentences) => {
        let output1 = ""; // output変数を外側に定義

        sentences.forEach((item) => {
            // console.log(item.personalities_id);

            if (personalityId == item.personalities_id) {
                // 比較演算子を修正

                // 条件に一致した場合の処理を追加
                output1 += `<div>`;
                output1 += `<div id="${item.id}" class="pb-2">`;
                output1 += `<p>${item.content}</p>`;
                output1 += `</div >`;
                output1 += `</div>`;
            }
        });
        // output変数の内容をHTMLに挿入
        document.querySelector("#output").innerHTML = output1;
    });
});

const element2 = document.getElementById("use_id");
const user_id = element2.dataset.userId;
getAll("editSentences").then((editSentences) => {
    let output = ""; // output変数を外側に定義
    let hasEditComment = false; // 編集コメントがあるかどうかのフラグ

    editSentences.forEach((item) => {
        // console.log(item.personalities_id);

        if (user_id == item.user_id) {
            // 比較演算子を修正

            // 条件に一致した場合の処理を追加
            output += `<div>`;
            output += `<div id="${item.id}" class="pb-2">`;
            output += `<p>${item.content}</p>`;
            output += `</div >`;
            output += `</div>`;
            hasEditComment = true; // 編集コメントがあることをフラグに記録
        }
    });
    if (!hasEditComment) {
        output += `<p>まだ編集コメントはありません</p>`;
    }
    // output変数の内容をHTMLに挿入
    document.querySelector("#output2").innerHTML = output;
});

// getAll("editSentences").then((editSentences) => {
//     let output = "";
//     editSentences.forEach((editSentence) => {
//         output += `<div>`;
//         output += `<div id="${editSentence.id}">`;
//         output += `<p>${editSentence.content}</p>`;
//         output += `</div>`;
//         output += `</div>`;
//     });
//     document.querySelector("#output2").innerHTML = output;
// });
