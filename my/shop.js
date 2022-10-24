/* 'use strict'
const goods_url = 'https://nosarevavs.ru/my/goods.php';
let goods = [];
const goodCard = document.querySelector('.card_goods');

async function getData() {
    let response = await fetch(goods_url);
    let result = await response.json();


    goodCard.insertAdjacentHTML('beforebegin',
        `

        `)
}

getData() */