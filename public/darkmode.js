// 🌙 Toggle Dark Mode
const toggleBtn = document.getElementById('theme-toggle')
const icon = document.getElementById('theme-icon')

// Cek preferensi sebelumnya
if (localStorage.theme === 'dark') {
  document.documentElement.classList.add('dark')
  icon.classList.replace('fa-moon', 'fa-sun')
}

toggleBtn.addEventListener('click', () => {
  const html = document.documentElement
  const isDark = html.classList.toggle('dark')

  if (isDark) {
    icon.classList.replace('fa-moon', 'fa-sun')
    localStorage.theme = 'dark'
  } else {
    icon.classList.replace('fa-sun', 'fa-moon')
    localStorage.theme = 'light'
  }
})
