const $allFields = document.querySelectorAll("[data-dynamic-input]");
const $allBox = document.querySelectorAll("span.box");

$allBox.forEach($box =>{

 $spanBox = $box.getElementsByClassName("box");

}
    );

   

$allFields.forEach($field => {
    const entityId = $field.getAttribute("data-dynamic-id");
    const fieldEntity = $field.getAttribute("data-dynamic-entity");
    const fieldName = $field.getAttribute("data-dynamic-input");
    const fieldValue = $field.textContent;
    resetField();

    function addButton(){
        const $btn = document.createElement("button");
        $btn.className = "btn btn-primary";
        $btn.textContent = "Modifier";
        $field.appendChild($btn);
        $btn.addEventListener("click", onModifyClicked);
    }

    function onModifyClicked() {
        $field.innerHTML = `
        <form method="POST">
            <input type="hidden" name="fieldName" value="${ fieldName }"/>
            <input type="hidden" name="fieldEntity" value="${ fieldEntity }"/>
            <input type="hidden" name="entityId" value="${ entityId }"/>
            <input name="${fieldName}" value="${ fieldValue }" class="form-control"/>
            <input class="btn btn-primary" type="submit" value="Valider"/>
            <button class="btn btn-danger">Annuler</button>
        </form>
        `;

        const $cancel = $field.querySelector("button");

        $cancel.addEventListener("click", resetField)
    }

    function resetField(){
        $field.innerHTML = `
        <span class="value">
            ${fieldValue}
        </span>`;
        addButton();
    };
});