const movieRatings = document.querySelectorAll('.movie-rating');


            function handleStarClick(event) {
            const rating = event.target.dataset.value;  
            const stars = event.target.parentNode.children; 
  
 
            for (let i = 0; i < stars.length; i++) {
            if (i < rating) {
             stars[i].classList.add('filled');  
           } else {
              stars[i].classList.remove('filled');  
             }
           }

              console.log(`Avaliação dada: ${rating} estrelas`);
          }


function handleStarHover(event) {
  const rating = event.target.dataset.value;
  const stars = event.target.parentNode.children;

 
  for (let i = 0; i < stars.length; i++) {
    if (i < rating) {
      stars[i].classList.add('hover'); 
    } else {
      stars[i].classList.remove('hover');  
    }
  }
}


function handleStarLeave(event) {
  const stars = event.target.parentNode.children;
  for (let i = 0; i < stars.length; i++) {
    stars[i].classList.remove('hover');  
  }
}


movieRatings.forEach(rating => {
  rating.addEventListener('click', handleStarClick); 
  rating.addEventListener('mouseover', handleStarHover);  
  rating.addEventListener('mouseleave', handleStarLeave); 
});

document.getElementById('edit-profile-btn').addEventListener('click', function() {
  
    document.getElementById('edit-form').style.display = 'block';
    document.getElementById('edit-profile-btn').style.display = 'none';  
  });
  
  document.getElementById('cancel-edit-btn').addEventListener('click', function() {
    
    document.getElementById('edit-form').style.display = 'none';
    document.getElementById('edit-profile-btn').style.display = 'block';  
  });
      
  document.getElementById('save-changes-btn').addEventListener('click', function() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const photo = document.getElementById('photo').files[0];  
  
   
    document.getElementById('profile-name').textContent = name;
    document.getElementById('profile-email').textContent = 'Email: ' + email;
  
    
    if (photo) {
      const reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('profile-pic').src = e.target.result;
      };
      reader.readAsDataURL(photo);
    }
  
    
    document.getElementById('edit-form').style.display = 'none';
    document.getElementById('edit-profile-btn').style.display = 'block'; 
  });
  
  
  const Sequelize = require('sequelize')
  const sequelize = new Sequelize('crud', 'root', '', {
    host: "localhost",
    dialect: "mysql"
  });