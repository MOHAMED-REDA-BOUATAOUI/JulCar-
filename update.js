
function updateCar(matricule) {
    const updatedMarque = prompt("Enter updated Marque for Matricule " + matricule);
    const updatedModel = prompt("Enter updated Model for Matricule " + matricule);
    const updatedTypeCarburant = prompt("Enter updated Type de Carburant for Matricule " + matricule);

    const updatedCarData = {
        matricule: matricule,
        marque: updatedMarque,
        model: updatedModel,
        type_carburant: updatedTypeCarburant
    };

  
    fetch('manage_cars.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(updatedCarData),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Car updated:', data);
      
    })
    .catch(error => {
        console.error('Error updating car:', error);
    });
}
