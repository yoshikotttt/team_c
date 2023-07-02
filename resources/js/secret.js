import { getAll, getOne, search } from "./api.js";
// 条件に合うものを探すためにsearch関数を使用

const params = new URLSearchParams(window.location.search);
const id = params.get("id");

getOne("users", id).then((user) => {
    console.log(user);

    let output1 = "";
    output1 += `<x-text-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value=${user.id} />`;
    document.querySelector("#userId").innerHTML = output1;

    let output2 = "";
    output2 += `${user.name}さんさんの誕生日は？`;
    document.querySelector("#question").innerHTML = output2;
});

function redirectToPage(userExists) {
    if (userExists) {
        // ユーザーが存在する場合はedit.blade.phpにリダイレクト（モーダル？）
        window.location.href = "/edit.blade.php";
    } else {
        // ユーザーが存在しない場合はdetail.blade.phpにリダイレクト
        window.location.href = "/detail.blade.php";
    }
}

document
    .getElementById("userForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        let user_id = document.getElementById("user_id").value;
        let birthday = document.getElementById("birthday").value;

        let params = {
            user_id: user_id,
            birthday: birthday,
        };

        // 条件に合うユーザーを検索
        search("user", params)
            .then((data) => {
                console.log("Search Results:", data);
                // 条件に合うユーザーが見つかった場合はedit.blade.phpにリダイレクト、見つからない場合はdetail.blade.phpにリダイレクト
                redirectToPage(data.length > 0);
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("一つ前のページに戻ってやり直してください。");
            });
    });
