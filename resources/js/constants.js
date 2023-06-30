const AXIOS_HEADER = {
    headers : {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
}
const YEARS = [
    1402 , 1403 , 1404 , 1405 , 1406 , 1407 , 1408 , 1409
]

const MONTH = [
    {
        title : 'فروردین',
        id : 1
    },
    {
        title : 'اردیبهشت',
        id : 2
    },
    {
        title : 'خرداد',
        id : 3
    },
    {
        title : 'تیر',
        id : 4
    },
    {
        title : 'مرداد',
        id : 5
    },
    {
        title : 'شهریور',
        id : 6
    },
    {
        title : 'مهر',
        id : 7
    },
    {
        title : 'آبان',
        id : 8
    },
    {
        title : 'آذر',
        id : 9
    },
    {
        title : 'دی',
        id : 10
    },
    {
        title : 'بهمن',
        id : 11
    },
    {
        title : 'اسفند',
        id : 12
    },

]
const DAYS = [
    1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16 , 17 , 18 , 19 , 20 , 21 , 22 , 23 , 24 , 25 , 26 , 27 , 28 , 29 , 30 , 31
]

export default {
    AXIOS_HEADER , YEARS , MONTH , DAYS
};
