<x-trader-layout>
    <div class="trader-kyc-gen-con">
        <div class="trader-kyc-wrap-one">
            KYC VERIFICATION
        </div>

        <div class="trader-kyc-wrap-two">
            <span>Upload a proof of your </span>
            <span class="trader-kyc-wrap-three">identity</span>
        </div>

        <div class="trader-kyc-wrap-four">
            <img src="{{asset('img/kyc-img1.png')}}" alt="kyc" class="trader-kyc-wrap-five">
        </div>
        
        <form action="{{ route('kyc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="type" class="trader-kyc-wrap-six">Document Type</label><br>
                <select name="type" required class="trader-kyc-wrap-seven button">
                    <option value="">Select Document type</option>
                    <option value="passport">Passport</option>
                    <option value="license">Driver's License</option>
                    <option value="idCard">National Identity Card</option>
                </select>
            </div>

            <div class="my-5">
                <label for="document_front" class="trader-kyc-wrap-six">Upload Front Side Of Document</label><br>
                <input type="file" name="document_front" required class="trader-kyc-wrap-seven button">
            </div>

            <div class="my-5">
                <label for="document_back" class="trader-kyc-wrap-six">Upload Back Side Of Document</label><br>
                <input type="file" name="document_back" required class="trader-kyc-wrap-seven button">
            </div>

            <div class="trader-kyc-wrap-eight">
                <input type="submit" value="Continue" class="trader-kyc-wrap-nine button">
            </div>

            <!-- Display validation or session errors -->
            @if ($errors->any())
                <div class="text-red-500 font-semibold bg-red-50 p-5 rounded">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </div>
</x-trader-layout>