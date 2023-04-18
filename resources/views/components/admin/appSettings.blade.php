            {{--  ADMIN CAN EDIT THE APPOINTMENT  --}}
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                  asign another technician
                </label>
                <select name="technician_id" id="technician_id" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                    @foreach ($technicians as $technician)
                        <option value="{{ $technician->id }}" {{ $appointment->technician_id == $technician->id ? 'selected' : '' }}>{{ $technician->user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Status
                </label>
                <select name="status" id="status" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                    <option disabled selected value> -- select an option -- </option>
                    <option class="" value="requested" {{ $appointment->status == 'requested' ? 'selected' : '' }}>Requested</option>
                    <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>