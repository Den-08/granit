let func_page = (find_elem, slave_elem) => {
    let elem_arr = document.querySelectorAll(`.${find_elem}`);
    let slave_arr = document.querySelectorAll(`.${slave_elem}`);

    let display_none = () => {
        elem_arr.forEach((elem) => {
            elem.firstElementChild.classList.remove('active');
            elem.lastElementChild.classList.remove('active_arrow');
            elem.nextElementSibling.classList.add('hidden');
        });
        if (slave_elem) {
            slave_arr.forEach((elem) => {
                elem.classList.add('hidden');
            });
        };
    }

    elem_arr.forEach((elem, ind) => {
        elem.addEventListener('click', () => {
            display_none(elem);
            elem.firstElementChild.classList.add('active');
            elem.lastElementChild.classList.add('active_arrow');
            elem.nextElementSibling.classList.remove('hidden');
            if (slave_elem) { slave_arr[ind].classList.remove('hidden') };
        });
    });
}

func_page('jobs__boxhead', 'jobs__picture');
func_page('service__boxhead');