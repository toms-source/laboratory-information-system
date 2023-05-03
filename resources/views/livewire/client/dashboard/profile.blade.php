<div  class="h-screen static w-fit flex lg:flex-row md:flex-col sm:flex-col xs ms-3 mt-3">
   <div id="profile" class="border-r-zinc-100">
        <div class="my-10">
            <img class="rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> 
            <div class="m-5">
                <input type="file" accept="image/*"/>
            </div>
        </div>
    </div>

   <div id="information" class="w-full">
    <div>
      <div class=" m-5 p-5 bg-white w-full rounded-md"> 
        <div id="basic_information">
            <div class="text-lg font-bold my-5">Basic Information</div>
            
            <!-- Name -->
            <div class="px-10">
                <div>
                    <label for="name" class="font-medium">Name: </label> 
                    <span>{{$name}}</span>
                </div>
                <!-- Date of birth -->
                <div>
                    <label for="dob" class="font-medium">Date of Birth: </label> 
                    <span></span>
                </div>
                <!-- Address -->
                <div>
                    <label for="address" class="font-medium">Address: </label> 
                    <span>{{$address}}</span>
                </div>
                <!-- Age -->
                <div>
                    <label for="age" class="font-medium">Age: </label> 
                    <span></span>
                </div>
                <!-- Gender -->
                <div>
                    <label for="gender" class="font-medium">Gender: </label> 
                    <span></span>
                </div>
                <!-- Contact -->
                <div>
                    <label for="contact" class="font-medium">Contact: </label> 
                    <span>{{$contact}}</span>
                </div>
            </div>
        </div> 

        <div id="emergency_information">
            <div class="text-lg font-bold my-5">Emergency Contact</div>
            
            <!-- Name -->
            <div class="px-10">
                <div>
                    <label for="name" class="font-medium">Name: </label> 
                    <span>Maria Dela Cruz</span>
                </div>

                <!-- Name -->
                <div>
                    <label for="name" class="font-medium">Relationship: </label> 
                    <span>Mother</span>
                </div>

                <!-- Contact -->
                <div>
                    <label for="contact" class="font-medium">Contact: </label> 
                    <span>+63 9331 798 221</span>
                </div>
            </div>
        </div>

        <div id="medical_background">
            <div class="text-lg font-bold my-5">Medical Background</div>
            
            <!-- Name -->
            <div class="px-10">
                <div>
                    <label for="name" class="font-medium">Name: </label> 
                    <span>Maria Dela Cruz</span>
                </div>

                <!-- Name -->
                <div>
                    <label for="name" class="font-medium">Relationship: </label> 
                    <span>Mother</span>
                </div>

                <!-- Contact -->
                <div>
                    <label for="contact" class="font-medium">Contact: </label> 
                    <span>+63 9331 798 221</span>
                </div>
            </div>
        </div> 
       <div class="btn pt-5 flex w-full justify-end gap-2">
        <button class="bg-red-400 hover:bg-red-500 py-2 px-5 rounded-md font-medium">Cancel</button>
        <button class="bg-sky-400 hover:bg-sky-500 py-2 px-4 rounded-md font-medium">Save</button>
       </div>
    </div>
   </div>
</div>