
@section('scripts')
    <script>
        const createButton = document.querySelector("#createProductModalButton");
        const editButton = document.querySelector("#editProductModalButton");
        const OpenModalCreate = document.querySelector("#OpenModalCreate");
        const OpenModalEdit = document.querySelector("#OpenModalEdit");
        const screen = document.querySelector("#screen");

        const toggleVisibility = (elementsToShow, elementsToHide) => {
            elementsToShow.forEach(element => {
                if (element.classList.contains("hidden")) {
                    element.classList.add("block");
                    element.classList.remove("hidden");
                }
            });
            elementsToHide.forEach(element => {
                if (element.classList.contains("block")) {
                    element.classList.add("hidden");
                    element.classList.remove("block");
                }
            });
        };

        createButton.addEventListener('click', () => {
            console.log("Create button clicked");
            toggleVisibility([OpenModalCreate, screen], [OpenModalEdit]);
        });

        editButton.addEventListener('click', () => {
            console.log("Edit button clicked");
            toggleVisibility([OpenModalEdit, screen], [OpenModalCreate]);
        });

        screen.addEventListener('click', () => {
            console.log("Screen clicked");
            toggleVisibility([], [OpenModalCreate, OpenModalEdit, screen]);
        });
