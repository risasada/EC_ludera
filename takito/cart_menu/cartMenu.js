    const email = document.getElementsByClassName('cart-email')[0]
        const formss = document.getElementsByTagName('form')[0]


        formss.addEventListener('submit',function(e) {
        
        const inputemail_val = validate(email) 
        console.log(inputemail_val)
        if(inputemail_val['result'] === false){
            e.preventDefault()
            if (inputemail_val['type'] === 'valueMissing'){
            email.nextElementSibling.textContent="✖ 必須項目を入力して下さい"
            elementChange(email.nextElementSibling,'approval','reject') 
            }else if(inputemail_val['type'] === 'typeMismatch'){
            email.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
            elementChange(email.nextElementSibling,'approval','reject')

            } else{

            email.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
            elementChange(email.nextElementSibling,'approval','reject')
            }

        
        }
    })
        function validate(inputElement){
        if(inputElement.validity.valid){
            return {result:true,type:''}
        }
        else if(!inputElement.validity.valid){

            if(inputElement.validity.valueMissing){
            return {result:false,type:'valueMissing'}

            } else if (inputElement.validity.typeMismatch) {
                return {result:false,type:'typeMismatch'}

            } else{
            return {result:false,type:''}

            }
        }
        }


        function elementChange(element,removeClass,addClass){
        element.classList.remove(removeClass)
        element.classList.add(addClass)
        return element
        }