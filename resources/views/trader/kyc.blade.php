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
        
        <form action="">
            @csrf

            <div>
                <label for="document-type" class="trader-kyc-wrap-six">Document Type</label><br>
                <select name="document-type" required class="trader-kyc-wrap-seven button">
                    <option value="">Select Document type</option>
                    <option value="passport">Passport</option>
                    <option value="driver's license">Driver's License</option>
                    <option value="national id card">National Identity Card</option>
                </select>
            </div>

            <div class="my-5">
                <label for="document" class="trader-kyc-wrap-six">Upload Front Side Of Document</label><br>
                <input type="file" name="document" required class="trader-kyc-wrap-seven button">
            </div>

            <div class="trader-kyc-wrap-eight">
                <input type="submit" value="Continue" class="trader-kyc-wrap-nine button">
            </div>
        </form>
    </div>
</x-trader-layout>