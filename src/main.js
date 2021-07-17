function selectFull() {
  let x, i, j, l, ll, selElement, a, b, c;
  x = document.getElementsByClassName("formselectwrap");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElement = x[i].getElementsByTagName("select")[0];
    ll = selElement.length;

    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElement.options[selElement.selectedIndex].innerHTML;
    x[i].appendChild(a);

    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      c = document.createElement("DIV");
      c.innerHTML = selElement.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        let y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
  function closeAllSelect(elmnt) {

    let x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  document.addEventListener("click", closeAllSelect);
}

selectFull();

//////////////////////////////////////////////////////
const form = document.querySelector('.form')
const closeForm = document.querySelector('.x');

function addEvent(elem, typeEvent, eventHandler) {
  elem.addEventListener(typeEvent, eventHandler)
}
function formShut(e) {
  let target = e.target;
  if (target.closest('.form')) {
    form.classList.add('hide');
  }
};
function formOpen(e) {
  let target = e.target;
  if (!target.closest('.form')) {
    form.classList.toggle('hide');
  }
}
function changeLabel(e) {
  const target = e.target;
  console.log(target);
  const label = target.labels[0];
  console.log('label: ' + label);
  console.log(target.value);

  const span = [...document.querySelectorAll('.span')]
  span.forEach(elem => {
    if (target.value) {
      elem.classList.add('label-focus')

    } 
    else {
      elem.classList.remove('label-focus')
    }

  })
}


addEvent(closeForm, 'click', formShut);
addEvent(window, 'click', formOpen);
addEvent(form, 'change', changeLabel);

















