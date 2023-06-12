import './bootstrap';


async function toggleLike(tweetId, el) {
    let span = el.querySelector('span');
    try {
        let prev = span.innerText
        span.innerText = '🔃'

        let data = await fetch(`/${tweetId}/like`, {
            method: 'POST',
            credentials: 'same-origin',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('[name=csrf-token]').content
            }
        });

        let likes = await data.text();
        span.innerText = likes;

    } catch (e) {
        span.innerText = 'error'
        console.log('like error: ', e)
    }
}

window.toggleLike = toggleLike
