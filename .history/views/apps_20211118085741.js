const userMessages = [];

const userMessageForm = document.querySelector('form');
const userMessagesList = document.querySelector('.ul');

function renderMessages() {
  let messageItems = '';
  for (const message of userMessages) {
console.log(messageItems)
    messageItems = `
      ${messageItems}
          <img src="${message.image}" alt="${message.text}">
        <p>${message.text}</p>
    `;
  }

  userMessagesList.innerHTML = messageItems;
  alert('ff')
}

function formSubmitHandler(event) {
  event.preventDefault();
  const userMessageInput = event.target.querySelector('textarea');
  const messageImageInput = event.target.querySelector('input');
  const userMessage = userMessageInput.value;
  const imageUrl = messageImageInput.value;

  if (
    !userMessage ||
    !imageUrl ||
    userMessage.trim().length === 0 ||
    imageUrl.trim().length === 0
  ) {
    alert('Please insert a valid message and image.');
    return;
  }

  userMessages.push({
    text: userMessage,
    image: imageUrl,
  });

  userMessageInput.value = '';
  messageImageInput.value = '';

  renderMessages();
}

userMessageForm.addEventListener('submit', formSubmitHandler);
