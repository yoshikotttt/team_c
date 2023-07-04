import { getAll, getOne } from "./api.js";

const params = new URLSearchParams(window.location.search);
const id = params.get("id");

// getOne('users', id).then(user => {
//     return user;
// });

getOne("users", id).then((user) => {
    // console.log(user);
    let output = "";
    output += `${user.name}さん`;
    document.querySelector("#name").innerHTML = output;

    // let output1 = "";
    // output1 += `<h2>${user.name}さんはこんな人</h2>`;
    // document.querySelector("#name1").innerHTML = output1;

    let output2 = "";
    output2 += `<h2>つまり、<br>${user.name}さんはこんな人</h2>`;
    document.querySelector("#name2").innerHTML = output2;

    let output3 = "";
    output3 += `<button onclick="location.href='secret?id=${user.id}'" type="button" class="btn btn-primary">Edit</button>`;
    document.querySelector("#secretbtn").innerHTML = output3;

    const personality_id = user.personality_id;

    getAll("personalities").then((personalities) => {
        // console.log(personality_id);
        // console.log(personalities);
        let output = ""; // output変数を外側に定義

        personalities.forEach((item) => {
            // console.log(item.id);
            if (user.personality_id == item.id) {
                // 比較演算子を修正
                // 条件に一致した場合の処理を追加
                output += `${item.name}`;
            }

            // output変数の内容をHTMLに挿入
            document.querySelector("#type").innerHTML = output;
        });
    });
});

// personality
// getAll("personality_user").then((personality_user) => {
//     let output = "";
// output += `<div>`;
// output += `<h2>${personality_user.personality}</h2>`;
// output += `</div >`;
// document.querySelector("#type").innerHTML = output;
// });

getAll("sentences").then((sentences) => {
    getOne("users", id).then((user) => {
        // console.log(user.personality_id);

        let output = ""; // output変数を外側に定義
        //itemはsentenceテーブルの全データが入っている。
        sentences.forEach((item) => {
            // console.log(item.personalities_id);

            if (user.personality_id == item.personalities_id) {
                // 比較演算子を修正

                // 条件に一致した場合の処理を追加
                output += `<div>`;
                output += `<div id="${item.id}" class="pb-2">`;
                output += `<p>${item.content}</p>`;
                output += `</div >`;
                output += `</div>`;

                //output2で使うために変数に入れる。
            }
        });
        // output変数の内容をHTMLに挿入
        document.querySelector("#output").innerHTML = output;
    });
});

//編集したsentenceのidから、sentenceテーブルのcontentを取得する

getAll("editSentences").then((editSentences) => {
    getAll("sentences").then((sentences) => {
        let output = ""; // output変数を外側に定義
        let hasEditComment = false; // 編集コメントがあるかどうかのフラグ

        editSentences.forEach((edit) => {
            let editSentences = ""; // ユーザーごとの出力を保持する変数
            sentences.forEach((item) => {
                if (edit.sentence_id == item.id && edit.user_id == id) {
                    editSentences += `<div>`;
                    editSentences += `<div id="${edit.id}">`;
                    editSentences += `<p class = "text-gray-500">${item.content}</p>`;
                    editSentences += `<p class = "font-bold pb-2">${edit.content}</p>`;
                    editSentences += `</div>`;
                    hasEditComment = true; // 編集コメントがあることをフラグに記録
                }
            });

            output += editSentences; // ユーザーごとの出力をoutputに追加
        });

        if (!hasEditComment) {
            output += `<p>まだ編集コメントはありません</p>`;
        }
        document.querySelector("#output2").innerHTML = output; // outputをHTMLに挿入
    });
});

// getAll("editSentences").then((editSentences) => {
//     let output = ""; // output変数を外側に定義
//     //sentence.idからsentenceを取得する

//     getOne("sentences",id).then((sentences) => {
//         editSentences.forEach((item) => {
//             console.log(item.user_id);
//             console.log(id);
//             // console.log(id)
//             console.log(sentences)

//             if (id == item.user_id) {
//                 // 比較演算子を修正

//                 // 条件に一致した場合の処理を追加
//                 output += `<div>`;
//                 output += `<div id="${item.id}">`;
//                 // output += `<p>${sentences.content}</p>`;
//                 output += `<p>${item.content}</p>`;
//                 output += `</div >`;
//                 output += `</div>`;
//             }
//         });
//     })

// getOne("sentences", item.sentence_id).then((sentences) => {
//     editSentences.forEach((item) => {
//         console.log(item.user_id);
//         console.log(id);
//         // console.log(id)
//         console.log(sentences)

//         if (id == item.user_id) {
//             // 比較演算子を修正

//             // 条件に一致した場合の処理を追加
//             output += `<div>`;
//             output += `<div id="${item.id}">`;
//             // output += `<p>${sentences.content}</p>`;
//             output += `<p>${item.content}</p>`;
//             output += `</div >`;
//             output += `</div>`;
//         }
//     });
// })
// output変数の内容をHTMLに挿入
// document.querySelector("#output2").innerHTML = output;
// });
