document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registerForm");
    if (!form) return;

    form.addEventListener("submit", (e) => {
        const fields = [
            { id: "name", message: "El nombre es obligatorio." },
            {
                id: "email",
                message: "El correo es obligatorio.",
                pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                invalidMsg: "Correo inválido.",
            },
            { id: "password", message: "La contraseña es obligatoria." },
        ];

        let valid = true;

        fields.forEach((field) => {
            const input = document.getElementById(field.id);
            const error = document.getElementById(field.id + "Error");
            const group = input.closest(".form-group");

            error.textContent = "";
            group.classList.remove("input-error-visible");

            const value = input.value.trim();

            if (!value) {
                error.textContent = field.message;
                group.classList.add("input-error-visible");
                valid = false;
            } else if (field.id === "password") {
                const passwordPattern = /^(?=.*[A-Z])(?=(?:.*\d){2,}).{8,}$/;
                if (!passwordPattern.test(value)) {
                    error.textContent =
                        "Debe tener al menos 8 caracteres, una mayúscula y dos números.";
                    group.classList.add("input-error-visible");
                    valid = false;
                }
            } else if (field.pattern && !field.pattern.test(value)) {
                error.textContent = field.invalidMsg;
                group.classList.add("input-error-visible");
                valid = false;
            }
        });


        if (!valid) e.preventDefault();
    });
});
