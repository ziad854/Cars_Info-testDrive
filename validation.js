const validation = new JustValidate("#register");
validation
    .addField("#email", [
        { rule: "required" }, { rule: "email" } 
    ])
    .addField("#user", [
        { rule: "required" }
    ])
    .addField("#password", [
        { rule: "required" }, { rule: "password" }
    ])
    .onSuccess((event) => {
        document.getElementById("register").submit();     //to execute
    });