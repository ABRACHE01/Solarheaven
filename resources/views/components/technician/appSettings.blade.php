    {{-- COMPLETED STATUS FOR THE TECHNICIAN  --}}

    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
           Appointement Status
        </label>    
        <select name="status" id="status" placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
            <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>

    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
         service price 
        </label> 
        <input type="number" name="amount" id="amount" value="{{ $appointment->service->price }}"  disabled
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
       
    </div>

    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
         extra_charges
        </label> 
        <input type="number" name="extra_charges" id="amount" placeholder="extra_charges"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
    </div>

    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            paid_at
        </label> 
        <input type="datetime-local" name="paid_at" id="paid_at" placeholder="paid_at"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
    </div>

    

    <div class="mb-5">
        <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
            note
        </label> 
        <textarea type="description" name="note" id="note" placeholder="appointement description here"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" ></textarea>  
    </div>

    <div class="mb-5">
        <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
            payment methode
        </label> 
        <select type="datetime-local" name="method" id="methode" placeholder="methode"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   

            <option value="cash" >cash</option>
            <option value="card" >card</option>
        </select>
    </div>

    <div class="mb-5">
        <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
            payment status
        </label> 
        <select type="datetime-local" name="payment_status" id="payment_status" 
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   

            <option value="pending" >pending</option>
            <option value="paid" >paid</option>
            <option value="refunded" >refunded</option>
            <option value="failed" >failed</option>
            
        </select>
    </div>
    


