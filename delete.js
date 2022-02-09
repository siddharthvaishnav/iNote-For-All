deletes = document.getElementsByClassName('delete');
Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {
        console.log("edit",);
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        sno = e.target.id.substr(1,);
        if (confirm("press button!")) {
            console.log("yes");
            window.location = `/inote/index.php?delete=${sno}`;
        }
        else {
            console.log("no");
        }
    })

})