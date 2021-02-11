/* const CreateCars = (()=>{
    const cars = [];
    
    class Car {
        constructor(maker, country, img, model, price, power, year) {
            this.maker = maker;
            this.country = country;
            this.img = img;
            this.model = model;
            this.price = price;
            this.power = power;
            this.year = year;
        }
    }

    function makeCar(maker, country, img, model = 'new model', price = 10000, power, year) {
        const car = new Car(maker, country, img, model , price, power, year);
        cars.push(car)
    }
    
    function produceCars() {
        makeCar('rimac', 'croatia', 'img/Rimac concept two.jpg');
        makeCar('volkswagen', 'germany', 'img/golf 2.jpg');
    }
    produceCars();
    
    return {
        cars
    }
})();

console.log(CreateCars.cars);

const DisplayCars = ((CreateCars)=>{
    //all cars
    const cars = CreateCars.cars;
    console.log(cars);
    const inventory = document.querySelector('.inventory-container');
    //content loaded
    document.addEventListener('DOMContentLoaded', ()=> {
        inventory.innerHTML = '';

        let output ='';
        cars.forEach((car) => {
            output += `<!-- single car -->
            <div class="col-10 mx-auto my-3 col-md-6 col-lg-4 single-car ${car.country}">
                <div class="card car-card">
                    <img src="${car.img}" class="card-img-top car-img" alt="">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="car-info d-flex justify-content-between">
                            <div class="car-text text-uppercase">
                                <h6 class="font-weight-bold">${car.maker}</h6>
                                <h6>${car.model}</h6>
                            </div>
                            <h5 class="car-value align-self-center py-2 px-3">$
                                <span class="car-price">${car.price}</span>
                            </h5>
                        </div>
                    </div>
                    <!-- end of card-->
                    <div class="card-footer text-capitalize d-flex justify-content-between">
                        <p><span><i class="fas fa-tachometer-alt"></i></span>${car.power}</p>
                        <p><span><i class="fas fa-clock"></i></span>${car.year}</p>
                    </div>
                </div>
              </div>
              <!-- end of single car -->`
        })
        inventory.innerHTML = output;

    })
    

}) (CreateCars);

const FilterCars = (()=> {
    const filter = document.querySelectorAll('filter-btn');
    
    filter.forEach((btn)=> {
        btn.addEventListener('click',(event)=> {
            const value = event.target.dataset.filter;
            const singleCar = document.querySelectorAll('.single-car');
            
            singleCar.forEach(car=> {
                if(value === 'all') {
                    car.style.display = 'block';
                }
                else {
                    (!car.classList.contains(value))
                   
                }
            })
        })
    })
})(); */

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}