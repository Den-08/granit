let func_page = (find_elem) => {
    let elem_arr = document.querySelectorAll(`.${find_elem}`);

    let display_none = (elem_current) => {
        elem_arr.forEach((elem) => {
            elem.firstElementChild.classList.remove('active');
            elem.lastElementChild.classList.remove('active_arrow');
            elem.nextElementSibling.classList.add('hidden');
        });
        elem_current.firstElementChild.classList.add('active');
        elem_current.lastElementChild.classList.add('active_arrow');
        elem_current.nextElementSibling.classList.remove('hidden');
    }

    elem_arr.forEach((elem) => {
        elem.addEventListener('click', () => { display_none(elem) });
    });
}

func_page('jobs__boxhead');
func_page('service__boxhead');