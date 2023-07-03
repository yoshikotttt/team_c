import { getAll, getOne, create } from "./api.js";

// getOne("users", id).then((user) => {
//     console.log(user);
// });

document
    .getElementById("searchForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        const keywordInput = document.getElementById("keyword").value;
        getAll("users").then((users) => {
            console.log(users);

            let output = "";
            let foundUser = false;

            users.forEach((user) => {
                console.log("データ" + user.original_id);
                console.log("キーワード" + keywordInput);
                if (user.original_id === keywordInput) {
                    output += `<div id=${user.id}>`;
                    output += `<p>${user.name}さん</p>`;
                    output += `<button onclick="location.href='detail?id=${user.id}'" type="button" class="btn btn-primary">詳細を見る</button>`;
                    output += `</div>`;
                    foundUser = true;
                }
            });
            if (!foundUser) {
                output = "<p>該当するユーザーは見つかりませんでした。</p>";
            }

            document.querySelector("#output").innerHTML = output;
        });
    });

document
    .getElementById("searchForm2")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        const keywordInput = document.getElementById("keyword2").value;
        getAll("users").then((users) => {
            console.log(users);

            let output = "";
            let foundUser = false;

            users.forEach((user) => {
                console.log("データ" + user.personality_id);
                console.log("キーワード" + keywordInput);
                if (user.personality_id === keywordInput) {
                    output += `<div id=${user.id}>`;
                    output += `<p>${user.name}さん</p>`;
                    output += `<button onclick="location.href='detail?id=${user.id}'" type="button" class="btn btn-primary">詳細を見る</button>`;
                    output += `</div>`;
                    foundUser = true;
                }
            });
            if (!foundUser) {
                output = "<p>該当するユーザーは見つかりませんでした。</p>";
            }

            document.querySelector("#output").innerHTML = output;
        });
    });

// document
//     .getElementById("searchForm")
//     .addEventListener("submit", function (event) {
//         event.preventDefault();
//         const keywordInput = document.getElementById("keyword");
//         const keyword = keywordInput.value;

//         getAll("search", { keyword: keyword }).then((response) => {
//             const users = response.data;
//             let output = "";
//             if (users) {
//                 users.forEach((user) => {
//                     output += `<div id=${user.id}>`;
//                     output += `<p>${user.name}さん</p>`;
//                     output += `<button onclick="location.href='detail?id=${user.id}'" type="button" class="btn btn-primary">詳細を見る</button>`;
//                     output += `</div>`;
//                 });
//             } else {
//                 output = "<p>該当するユーザーは見つかりませんでした。</p>";
//             }
//             document.querySelector("#output").innerHTML = output;
//         });
//     });

// getAll("sentences").then((sentences) => {
//     // console.log(sentences);
//     let output = "";
//     sentences.forEach((item) => {
//         if (s == item.id) {
//             // 比較演算子を修正

//             // 条件に一致した場合の処理を追加
//             output += `<p>${item.content}</p>`;
//         }
//     });

//     document.querySelector("#select").innerHTML = output;
// });
