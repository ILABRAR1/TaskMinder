const listContainer = document.getElementById("list-container");

listContainer.addEventListener("click", function(e) {
    if (e.target.tagName === "LI") {
        e.target.classList.toggle("checked"); // Toggle the 'checked' class
        saveData(); // You may have a function to save the task state here
    }
}); 
    // Get the modal element
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var addTaskBtn = document.getElementById("addTaskBtn");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    addTaskBtn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }