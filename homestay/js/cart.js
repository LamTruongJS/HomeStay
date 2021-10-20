var imgcart = document.querySelectorAll('.content__img');
for (let j = 0; j < imgcart.length; j++) {
  const listImg = document.querySelectorAll('.content__cart__desc__img');
  for (let i = 0; i < listImg.length; i++) {
    listImg[i].addEventListener('click', () => {
      let index= Math.trunc(i/10);
      imgcart[index].src = listImg[i].src;     
    });
  }
}
