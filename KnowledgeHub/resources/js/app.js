import "./bootstrap";
import "flowbite";
import Swal from "sweetalert2";

window.addEventListener("alert", (e) => {
    const data = e.detail;

    console.log(e);

    Swal.fire({
        title: data.title,
        position: data.position,
        icon: data.type,
        timer: data.timer,
    });
});
