
	@include('header')	
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					
					<div class="input-group search-area ms-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
				</div>
				<div class="row">	
					
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

       
@include('footer')
<script>
 document.addEventListener('DOMContentLoaded', function() {
        const chatUsers = document.querySelectorAll('.dz-chat-user');
        chatUsers.forEach(user => {
            user.addEventListener('click', function() {
                const userId = this.getAttribute('data-user-id');
                const userName = this.querySelector('.user_info span').innerText; 
                document.getElementById('recepteur_id').value = userId;
                document.getElementById('chatWithName').innerText = userName;
                fetch(`/messages/${userId}`)
                    .then(response => response.json())
                    .then(messages => {
                        const chatBody = document.querySelector('#DZ_W_Contacts_Body3');
                        chatBody.innerHTML = '';
                        messages.forEach(message => {
                            const messageElement = document.createElement('div');
                            messageElement.classList.add('d-flex', 'justify-content-' + (message.is_sender ? 'end' : 'start'), 'mb-4');
                            messageElement.innerHTML = `
                                <div class="img_cont_msg">
                                    <img src="${message.is_sender ? message.sender_image : message.receiver_image}" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="${message.is_sender ? 'msg_cotainer_send' : 'msg_cotainer'}">
                                    ${message.message}
                                    <span class="msg_time">${message.datetime}</span>
                                </div>
                            `;
                            chatBody.appendChild(messageElement);
                        });
                    });
            });
        });

        document.querySelector('.dz-chat-history-back').addEventListener('click', function() {
            document.querySelector('.dz-chat-history-box').classList.add('d-none');
        });
    });

</script>
</script>