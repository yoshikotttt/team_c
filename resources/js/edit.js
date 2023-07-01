import { create } from "./api.js";
// 【備忘】性格を書き替えるのではなく、別テーブルへ追加するのでここではcreateの関数を使用

document
    .getElementById("editForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        // let user_id = document.getElementById("user_id").value;
        // let sentence_id = document.getElementById("sentence_id").value;
        // let edit_user_id = document.getElementById("edit_user_id").value;

        let user_id = parseInt(document.getElementById("user_id").value, 10);
        let sentence_id = parseInt(document.getElementById("sentence_id").value, 10);
        let edit_user_id = parseInt(document.getElementById("edit_user_id").value, 10);
        let content = document.getElementById("content").value;


        if (!user_id || !sentence_id || !edit_user_id || !content) {
            alert("Please fill in all required fields.");
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
        });
    });
