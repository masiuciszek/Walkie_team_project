function fetchUrl(url,bodyVal, callback){
  fetch(url, {
    method: 'post',
    headers: {
        "Content-Type": "application/json",
    },
    body: bodyVal,
  })
  .then(response => response.json())
  .then(response => callback(response))
  .catch(error => console.error(error));
}

        const btnUp = document.querySelectorAll('.btn-up');
        const btnDown = document.querySelectorAll('.btn-down');
        const csrfToken = document.getElementById('csrf-token').content;

        btnUp.forEach(btn => {
          btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.fa-thumbs-up').classList = 'fa fa-thumbs-up icon-up';
            const id = e.target.closest('form').dataset.reviewid;
            fetchUrl(
              `/api/review/${id}/vote`,
              JSON.stringify({_token:csrfToken, vote: btn.value}),
              (response) => {
                console.log('Success:', response);
                btn.querySelector('.fa-thumbs-up').innerHTML = " " + response.posetiveVotes;
              }
            )
          });
        });

        btnDown.forEach(btn => {
          btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.fa-thumbs-down').classList = 'fa fa-thumbs-up icon-down';
            const id = e.target.closest('form').dataset.reviewid;
            fetchUrl(
              `/api/review/${id}/vote`,
              JSON.stringify({_token:csrfToken, vote: btn.value}),
              (response) => {
                console.log('Success:', response);
                btn.querySelector('.fa-thumbs-down').innerHTML = " " + response.negativeVotes;
              }
            )
          });
        })


        // const datesInputCalander = document.querySelector('#walking');
        // datesInputCalander.addEventListener('change', (e) => {
        //   console.log(e.target.value);
        //   const id = e.target.closest('form').dataset.dogid;
        //   console.log(id)
        //   fetchUrl(`/api/walk/${id}/time`,
        //   JSON.stringify({_token:csrfToken, walk:e.target.value})
        //   )
        // })


        // const submitTimes = document.querySelectorAll('.submit-time');

        // submitTimes.forEach(btn => {
        //   btn.addEventListener('click', (e) => {
        //     e.preventDefault();
        //     console.log('yeah booi');
        //     const id = e.target.closest('form').dataset.dogid
        //     console.log(id);
        //     fetchUrl(`/api/walk/${id}/time`,
        //     JSON.stringify({_token:csrfToken, walk:btn.value}),
        //     (response) => {
        //       console.log('Success:', response);
        //     }
        //     )
        //   })
        // })
        // const hourBtn = document.querySelector('.submit-time');
        // hourBtn.addEventListener('click', (e) => {
        //    e.preventDefault();
        //    fetchUrl(
        //        '/walk/{id}/walk',
        //        JSON.stringify({walk: datesInput}),
        //        (response) => {
        //            console.log('Success:', response);
        //            // btnUp.querySelector('i').innerHTML = " " + response;
        //        }
        //    );
        // });