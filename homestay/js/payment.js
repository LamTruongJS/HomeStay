const typePayBtn = document.querySelector('.option_type_payment');
const containPay = document.querySelector('.payment__type');

typePayBtn.addEventListener('click', () => {
  containPay.classList.toggle('togglePay');
});
const type_payment = document.querySelectorAll('.payment__type > img');

for (let i = 0; i < type_payment.length; i++) {
  type_payment[i].addEventListener('click', () => {
    console.log(type_payment[i]);
    typePayBtn.placeholder = type_payment[i].alt;
  });
}
