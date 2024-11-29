document.addEventListener("DOMContentLoaded", function() {
    const missions = [
        { id: 1, name: "Beber 8 vasos de agua", points: 10 },
        { id: 2, name: "Hacer 30 minutos de ejercicio", points: 20 },
        { id: 3, name: "Meditar por 10 minutos", points: 15 },
    ];

    const missionContainer = document.getElementById("missions");
    const pointsDisplay = document.getElementById("points");
    const levelDisplay = document.getElementById("level");
    let totalPoints = 0;
    let level = 1;
    const pointsPerLevel = 100; // Puntos necesarios para subir de nivel

    function renderMissions() {
        missionContainer.innerHTML = "";
        missions.forEach(mission => {
            const missionElement = document.createElement("div");
            missionElement.className = "mission";
            missionElement.innerHTML = `
                <p>${mission.name}</p>
                <button onclick="completeMission(${mission.id})">Completar</button>
            `;
            missionContainer.appendChild(missionElement);
        });
    }

    window.completeMission = function(missionId) {
        const mission = missions.find(m => m.id === missionId);
        if (mission) {
            totalPoints += mission.points;
            pointsDisplay.textContent = totalPoints;
            checkLevelUp();
            alert(`¡Misión completada! Has ganado ${mission.points} puntos.`);
        }
    }

    function checkLevelUp() {
        if (totalPoints >= level * pointsPerLevel) {
            level++;
            levelDisplay.textContent = level;
        }
    }

    renderMissions();
});
