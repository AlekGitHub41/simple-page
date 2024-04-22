const btn = document.getElementsByClassName("myBtn");
const contact_form = document.getElementsByClassName("contactForm");

function handleSubmit(e) {
    e.preventDefault();
    // Отправляем GET-запрос на сервер с помощью fetch
    if (!document.getElementById('myModal')) {
        fetch('/api/modal-window')
            .then(response => {
                // Проверяем, успешен ли ответ от сервера
                if (response.ok) {
                    // Если ответ успешен, преобразуем его в JSON
                    return response.json();
                } else {
                    // Если ответ не успешен, выбрасываем ошибку
                    throw new Error('Ошибка при получении JSON-ответа');
                }
            })
            .then(data => {
                // Обрабатываем полученные JSON-данные
                document.querySelector(".container_").insertAdjacentHTML("afterbegin", data["html"])
                const modal = document.getElementById('myModal');
                document.getElementsByClassName("close")[0].onclick = function () {
                    modal.classList.add("hidden")
                }
                document.getElementsByClassName("subm")[0].onclick = function () {
                    modal.classList.add("hidden")
                }
                for (const btn_ of btn) {
                    btn_.addEventListener("click",function (e){
                        modal.classList.remove("hidden")
                    })
                }
                window.onclick = function (event) {
                    if (event.target === modal) {
                        modal.classList.add("hidden")
                    }
                }
                modal.classList.remove("hidden")
                // Здесь можно выполнить необходимые действия с полученными данными
            })
            .catch(error => {
                // Обрабатываем ошибки, если они возникли
                console.error('Произошла ошибка:', error);
            });
    }
}

for (const form of contact_form) {
    form.addEventListener("submit", handleSubmit);
}


////////////////////////////////////////////////////////////

const menu = document.querySelector(".cursor-pointer")
const navbar_background = document.querySelector(".navbar-backdrop")
const navbar_close = document.querySelector(".navbar-close")
const navbar = document.getElementsByClassName("navbar-menu")[0]


menu.addEventListener("click", function (e) {
    navbar.classList.remove("hidden")
})
navbar_close.addEventListener("click", function (e) {
    navbar.classList.add("hidden")
})
navbar_background.addEventListener("click", function (e) {
    navbar.classList.add("hidden")
})

