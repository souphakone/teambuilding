let options = document.getElementById('modal-options')
let icoBtnOptionsOpen = document.getElementById('ico-btn-options-open')
let icoBtnOptionsClose = document.getElementById('ico-btn-options-close')

document.getElementById('btn-team-options').onclick = function () {
  if (options.classList.contains('hidden')) {
    icoBtnOptionsOpen.classList.add('hidden')
    icoBtnOptionsClose.classList.remove('hidden')
    options.classList.remove('hidden')
  } else {
    icoBtnOptionsOpen.classList.remove('hidden')
    icoBtnOptionsClose.classList.add('hidden')
    options.classList.add('hidden')
  }
}
