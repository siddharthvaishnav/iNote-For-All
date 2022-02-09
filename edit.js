edits = document.getElementsByClassName('edit');
Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
        console.log("edit",);
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        var editModal = new bootstrap.Modal(document.getElementById('editModal'), {
            keyboard: false
        })
        editModal.toggle();
    })

})