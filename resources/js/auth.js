document.addEventListener("DOMContentLoaded",function(){
    const form =document.getElementById("loginForm");
    if(form){
        form.addEventListener("submit", async function (e) {
            e.preventDefault();
            const email=document.getElementById("email").value;
            const password=document.getElementById("password").value;
            try{
                // axios.defaults.baseURL = "http://127.0.0.1:8000/api";
                const response=await axios.post("/api/login",{
                    email,
                    password
                });

                localStorage.setItem("token",response.data.token);
                alert("login successfully");
                window.location.href="/dashboard";
            }
           catch (error) {
    console.log(error.response.data); // 🔥 IMPORTANT
    alert("Login failed");
}

        });
    }

//     const registerForm = document.getElementById("registerForm");

//     if (registerForm) {
//         registerForm.addEventListener("submit", async function (e) {
//             e.preventDefault();

//             const name = document.getElementById("name").value;
//             const email = document.getElementById("email").value;
//             const password = document.getElementById("password").value;
// // axios.defaults.baseURL = "http://127.0.0.1:8000/api";
//             try {
//                 const response = await axios.post("/api/register", {
//                     name,
//                     email,
//                     password
//                 });

//                 localStorage.setItem("token", response.data.token);

//                 alert("Registered successfully!");
//           console.log("Form submitted", name, email);

// window.location.href = "/login";
//             } catch (error) {
// console.log(error.response.data);
// alert("Error: " + error.response.data.message);
//             }
//         });
//     }
const registerForm = document.getElementById("registerForm");
console.log("Form found:", document.getElementById("registerForm"));
if (registerForm) {
    registerForm.addEventListener("submit", async function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        console.log("Submitting:", name, email);

        try {
            const response = await axios.post("/api/register", {
                name,
                email,
                password
            });

            console.log("Response:", response.data);

            if (response.data.token) {
                localStorage.setItem("token", response.data.token);
            }

            alert("Registered successfully!");
            window.location.href = "/login";

        } catch (error) {
            console.log("Error:", error.response.data);
            alert("Error: " + error.response.data.message);
        }
    });
}
});




