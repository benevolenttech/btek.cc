function handleRefClick(e, personName) {
  e.preventDefault()
  window.open('mailto:hi@benevolent.tech?' +
    'subject=Can you connect me?' +
    '&body=Can you connect me with ' + personName + ' to hear more about their project?',
    '', 'width=600, height=500')
}