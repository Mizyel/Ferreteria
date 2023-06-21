function create(){
    axios.post("/producto",{
        /*este paso es clave, si quiero utilizar el 
        orm, los nombres de los campos se tienen que llamar
         igual que en la tabla en la base de datos*/
        'nombre': "Fresa",
        'cantidad': 15,
        'estado': "A",
    }).then(function (response){
        console.log(response);
    })
    .catch(function (error){
        console.log(error);
    });
}