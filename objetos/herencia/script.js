/*const meds = document.querySelector(".meds");
const progs = document.querySelector(".progs");

const getRadioValue = (name) => {
    const radios = document.querySelectorAll(name);
    let val;
    Object.keys(radios).forEach((obj, i) => {
        if (radios[i].checked) {
            val = radios[i].value;
        }
    });
    return val;
}

meds.addEventListener('change', (e) => {
    if (getRadioValue('prof')=="medicos") {
        meds.removeAttribute("disabled");
    }

});
progs.addEventListener('change', (e) => {
    if(getRadioValue('prof')=="programadores"){
        progs.removeAttribute("disabled");
    }
});*/
const meds = document.querySelector(".meds");
const progs = document.querySelector(".progs");
const rad = document.myForm.prof;
var prev = null;
for (var i = 0; i < rad.length; i++) {
    rad[i].addEventListener('change', function() {
        if (this !== prev) {
            prev = this;
        }
        console.log(this.value)
        if (this.value=="medicos") {
            meds.removeAttribute("disabled");
            progs.setAttribute("disabled",true);
        } else if(this.value=="programadores"){
            progs.removeAttribute("disabled");
            meds.setAttribute("disabled",true);
        }
    });
}