import { getAll, getOne, search } from "./api.js";
// 条件に合うものを探すためにsearch関数を使用

const params = new URLSearchParams(window.location.search);
const id = params.get("id");

getOne("users", id).then((user) => {
    console.log(user);

    
    let output = "";
    output += `${user.name}さんの誕生日は？`;
    document.querySelector("#question").innerHTML = output;
});

document
    .getElementById("userForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        let birthday = document.getElementById("content").value;
        // console.log(user_id)
        console.log(birthday)
        getOne("users", id).then((user) => {
            console.log(user);
            const correct_birthday = user.birthday;
            const correct_user_id = user.id;
            if(birthday == correct_birthday){
                window.location.href =`detail_edit?id=${correct_user_id}`;
            }else{
                alert('誕生日がちがうよ。');
                window.location.href =`detail?id=${correct_user_id}`;
            }
        });

        // 条件に合うユーザーを検索
        // search("user", params)
        //     .then((data) => {
        //         console.log("Search Results:", data);
        //         // 条件に合うユーザーが見つかった場合はedit.blade.phpにリダイレクト、見つからない場合はdetail.blade.phpにリダイレクト
        //         redirectToPage(data.length > 0);
        //     })
        //     .catch((error) => {
        //         console.error("Error:", error);
        //         alert("一つ前のページに戻ってやり直してください。");
        //     });
    });
