document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour ajouter une nouvelle ligne d'information
    // Ajoute une nouvelle ligne de données dans la table

    // Fonction pour gérer les étapes du formulaire
    let currentStep = 0;
    const steps = document.querySelectorAll(".wizard .content section");
    const tabs = document.querySelectorAll(".wizard .steps ul li");

    function showStep(step) {
        // Masquer toutes les sections
        steps.forEach((section, index) => {
            section.style.display = index === step ? "block" : "none";
        });

        // Gérer les onglets actifs
        tabs.forEach((tab, index) => {
            tab.classList.toggle("current", index === step);
            tab.classList.toggle("done", index < step);
        });

        // Activer/Désactiver les boutons Previous et Finish
        document
            .querySelector("a[href='#previous']")
            .parentElement.classList.toggle("disabled", step === 0);
        document.querySelector(
            "a[href='#finish']"
        ).parentElement.style.display =
            step === steps.length - 1 ? "block" : "none";
        document.querySelector("a[href='#next']").parentElement.style.display =
            step === steps.length - 1 ? "none" : "block";
    }

    // Fonction pour passer à l'étape suivante
    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }

    // Fonction pour revenir à l'étape précédente
    function previousStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    }

    // Initialiser le formulaire et afficher la première étape
    showStep(currentStep);

    // Gestion des événements pour les boutons "Next" et "Previous"
    document.querySelector("a[href='#next']").addEventListener("click", (e) => {
        e.preventDefault();
        nextStep();
    });

    document
        .querySelector("a[href='#previous']")
        .addEventListener("click", (e) => {
            e.preventDefault();
            previousStep();
        });

    // Attacher la fonction `addInfoRow` au bouton "Ajouter une ligne"
    document
        .querySelector("button#addInfoRow")
        .addEventListener("click", (e) => {
            e.preventDefault();
            addInfoRow();
        });
        // Attacher la fonction `addChecklistRow` au bouton "Ajouter une ligne"
    document
    .querySelector("button#addChecklistRow")
    .addEventListener("click", (e) => {
        e.preventDefault();
        addChecklistRow();
    });
});

function addInfoRow() {
    const table = document.getElementById("infoTable");
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);

    // Cellule Numéro
    const cell1 = row.insertCell(0);
    cell1.innerHTML = rowCount;

    console.log(rowCount)
    // Cellule Services
    const cell2 = row.insertCell(1);
    cell2.innerHTML = `<input name="data[${
        rowCount
    }][serviceDescription]" type="text" class="form-control" placeholder="Description du Service">`;

    // Cellule Risque
    const cell3 = row.insertCell(2);
    cell3.innerHTML = `
    <div class="risk-check">
        <label>
            <input type="radio" name="data[${rowCount }][riskLevel${
                rowCount 
    }]" value="high">
            <div class="circle red" title="Élevé"></div>
        </label>
        <label>
            <input type="radio" name="data[${rowCount }][riskLevel${
                rowCount 
    }]" value="medium">
            <div class="circle orange" title="Moyen"></div>
        </label>
        <label>
            <input type="radio" name="data[${rowCount }][riskLevel${
                rowCount 
    }]" value="low">
            <div class="circle green" title="Faible"></div>
        </label>
    </div>
`;

    // Cellule Observations
    const cell4 = row.insertCell(3);
    cell4.innerHTML = `<textarea name="data[${
        rowCount 
    }][observation]" id="observation" class="form-control" placeholder="Observation"
                                                            cols="30" required></textarea>`;

    // Cellule Check
    const cell5 = row.insertCell(4);
    cell5.innerHTML = `<label class="customcheckbox mb-3"> <input type="checkbox" name="data[${
        rowCount 
    }][completed]"><span class="checkmark"></span></label>`;
}

// Fonction pour ajouter une ligne dans la checklist
function addChecklistRow() {
    const table = document.getElementById("checklistTable");
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);

    // Cellule Tâches
    const cell1 = row.insertCell(0);
    cell1.innerHTML = `<input type="text" placeholder="Ajouter une tâche..." name="data[${
        rowCount 
    }][tache]" class="required form-control">`;

    // Cellule Check
    const cell2 = row.insertCell(1);
    cell2.innerHTML = `<input type="checkbox" name="data[${
        rowCount 
    }][check]" class="required">`;
}
