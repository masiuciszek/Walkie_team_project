function fetchUrl(url, bodyVal, callback, method) {
    if (method === undefined) {
        method = 'post'
    }
    fetch(url, {
            method: method,
            headers: {
                "Content-Type": "application/json",
            },
            body: method == 'post' ? bodyVal : null,
        })
        .then(response => response.json())
        .then(response => callback(response))
        .catch(error => console.error(error));
}

function hoursTaken(hours, target) {
    if (hours == null) {
        target.display === 'none';
    }
}


const btnUp = document.querySelectorAll('.btn-up');
const btnDown = document.querySelectorAll('.btn-down');
const csrfToken = document.getElementById('csrf-token').content;

btnUp.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        btn.style.color = 'steelblue';
        const id = e.target.closest('form').dataset.reviewid;
        fetchUrl(
            `/api/review/${id}/vote`,
            JSON.stringify({
                _token: csrfToken,
                vote: btn.value
            }),
            (response) => {
                console.log('Success:', response);
                btn.querySelector('.fa-thumbs-up').innerHTML = " " + response.posetiveVotes;
            }
        )
        btn.disabled = true;
    });
});

btnDown.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        btn.style.color = 'tomato';
        const id = e.target.closest('form').dataset.reviewid;
        fetchUrl(
            `/api/review/${id}/vote`,
            JSON.stringify({
                _token: csrfToken,
                vote: btn.value
            }),
            (response) => {
                console.log('Success:', response);
                btn.querySelector('.fa-thumbs-down').innerHTML = " " + response.negativeVotes;
            }
        )
        btn.disabled = true;
    });
})


const datesInputCalander = document.querySelector('#walking');
const submitTimes = document.querySelectorAll('.submit-time');

datesInputCalander.addEventListener('change', (e) => {
    console.log(e.target.value);
    const date = e.target.value;
    const id = e.target.closest('form').dataset.dogid;
    console.log(id)
    fetchUrl(`/api/walk/${id}/time/${date}`,
        JSON.stringify({
            _token: csrfToken,
            walk: e.target.value
        }),
        (response) => {
            console.log('Success:', response);
        }, 'get');
  });




//   submitTimes.forEach(btn => {
//     btn.addEventListener('click', (e) => {
//         e.preventDefault();
//         // console.log(btn.value)
//         const id = e.target.closest('form').dataset.dogid
//         console.log(id);
//         fetchUrl(`/api/walk/${id}/time`,
//             JSON.stringify({
//                 _token: csrfToken,
//                 walk: btn.value
//             }),
//             (response) => {
//                 console.log('Success:', response);
//             }
//         )
//         let responseReq =  fetchUrl(`/api/walk/${id}/time/${date}`,
//         JSON.stringify({
//             _token: csrfToken,
//             walk: e.target.value
//         }),
//         (response) => {
//             console.log('Success:', response);
//         }, 'get')

//           console.log(responseReq);
//           for(let res in responseReq) {
//             console.log(res);

//           }
//     });
// })

// submitTimes.forEach(btn => {
//     btn.addEventListener('click', (e) => {
//         e.preventDefault();
//         // console.log(btn.value)
//         const id = e.target.closest('form').dataset.dogid
//         console.log(id);
//         fetchUrl(`/api/walk/${id}/time`,
//             JSON.stringify({
//                 _token: csrfToken,
//                 walk: btn.value
//             }),
//             (response) => {
//                 console.log('Success:', response);
//             }
//         )
//         // btn.style.display = 'none';
//     });
// })

// const hourBtn = document.querySelector('.submit-time');
// hourBtn.addEventListener('click', (e) => {
//    e.preventDefault();
//    fetchUrl(
//        '/walk/{id}/walk',
//        JSON.stringify({walk: datesInput}),
//        (response) => {
//            console.log('Success:', response);
//        }
//    );

// });
