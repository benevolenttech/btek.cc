var lastClick = 0;
function handleRefClick(e, personName) {
  e.preventDefault();
  if (Date.now() - lastClick > 5000) {
    lastClick = Date.now();
    const link =
      "mailto:hi@btek.cc?" +
      "subject=Can you connect me?" +
      "&body=Can you connect me with " +
      personName +
      " to hear more about their project?";
    window.open(link, "");
  }
}
