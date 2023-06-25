const AXIOS_HEADER = {
    headers : {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
}

export default {
    AXIOS_HEADER
};
