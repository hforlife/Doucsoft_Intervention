document.addEventListener("DOMContentLoaded", function () {
    // Attacher la fonction `addInfo` au bouton "Ajouter une ligne"
    document.querySelector("button#addInfo").addEventListener("click", (e) => {
        e.preventDefault();
        addInfo();
    });
    // Attacher la fonction `addChecklist` au bouton "Ajouter une ligne"
    document
        .querySelector("button#addChecklist")
        .addEventListener("click", (e) => {
            e.preventDefault();
            addChecklist();
        });
});

function addInfo() {
    const table = document.getElementById("infoTable");
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);

    // Cellule Numéro
    const cell1 = row.insertCell(0);
    cell1.innerHTML = rowCount;

    console.log(rowCount);
    // Cellule Services
    const cell2 = row.insertCell(1);
    cell2.innerHTML = `<input name="data[${rowCount}][serviceDescription]" type="text" class="form-control" placeholder="Description du Service">`;

    // Cellule Risque
    const cell3 = row.insertCell(2);
    cell3.innerHTML = `
    <div class="risk-check">
        <label>
            <input type="radio" name="data[${rowCount}][riskLevel${rowCount}]" value="high">
            <div class="circle red" title="Élevé"></div>
        </label>
        <label>
            <input type="radio" name="data[${rowCount}][riskLevel${rowCount}]" value="medium">
            <div class="circle orange" title="Moyen"></div>
        </label>
        <label>
            <input type="radio" name="data[${rowCount}][riskLevel${rowCount}]" value="low">
            <div class="circle green" title="Faible"></div>
        </label>
    </div>
`;

    // Cellule Observations
    const cell4 = row.insertCell(3);
    cell4.innerHTML = `<input name="data[${rowCount}][observation]" type="text" class="form-control" placeholder="Observation">`;

    // Cellule Check
    const cell5 = row.insertCell(4);
    cell5.innerHTML = `<label class="customcheckbox mb-3"> <input type="checkbox" name="data[${rowCount}][completed]"><span class="checkmark"></span></label>`;
}

// Fonction pour ajouter une ligne dans la checklist
function addChecklist() {
    const table = document.getElementById("checklistTable");
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);

    // Cellule Tâches
    const cell1 = row.insertCell(0);
    cell1.innerHTML = `<input type="text" placeholder="Ajouter une tâche..." name="data[${rowCount}][tache]" class="required form-control">`;

    // Cellule Check
    const cell2 = row.insertCell(1);
    cell2.innerHTML = `<input type="checkbox" name="data[${rowCount}][check]" class="required">`;
}
