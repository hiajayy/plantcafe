class UI {

    /* create loader */
    createLoader(){
        const loaderWrapper = document.createElement('div');
        const loader = document.createElement('div');
        const img = document.createElement('img');

        loaderWrapper.classList.add('loader-wrapper');
        loader.classList.add('loader');
        img.classList.add('loading-img');

        img.setAttribute('src', 'assets/images/loading.gif');
        img.setAttribute('alt', 'Loader');

        const siteWrapper = document.querySelector('.site-wrapper');
        document.body.insertBefore(loaderWrapper, siteWrapper);
        loaderWrapper.append(loader);
        loader.append(img);
        document.body.style.overflow = 'hidden';
    }

    /* remove loader */
    removeLoader(){
        const loaderWrapper = document.querySelector('.loader-wrapper');
        document.body.style.overflow = 'auto';
        if(loaderWrapper !== null){
            loaderWrapper.remove();
        }
    }

    /* overlay */
    overlay() {
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');
        document.body.appendChild(overlay);
    }

    //show confirm message
    static modalBox(head, desc, btnText, btnClass) {
        //create elements od modal
        const confirmModel = document.createElement('div');
        const modalDialog = document.createElement('div');
        const modalBox = document.createElement('div');
        const modalHeader = document.createElement('div');
        const modalBody = document.createElement('div');
        const heading = document.createElement('h5');
        const para = document.createElement('p');
        const subBtn = document.createElement('button');
        const close = document.createElement('button');

        //add class
        confirmModel.className = 'modal fade';
        modalDialog.className = 'modal-dialog modal-dialog-centered';
        modalBox.className = 'confirm-box modal-content';
        modalHeader.classList = 'modal-header';
        modalBody.classList = 'modal-body';
        heading.classList.add('mb-0');
        subBtn.className = `btn btn-block ${btnClass}`;
        subBtn.id = 'submit';
        close.className = 'close no-btn';

        //add id
        confirmModel.id = 'confirmMessage';

        //set attibutes
        subBtn.setAttribute('aria-label', "Close");
        subBtn.setAttribute('data-dismiss', "modal");
        close.setAttribute('aria-label', "Close");
        close.setAttribute('data-dismiss', "modal");

        //add text nodes
        heading.appendChild(document.createTextNode(head));
        para.appendChild(document.createTextNode(desc));
        subBtn.appendChild(document.createTextNode(btnText));
        close.innerHTML = '&times;';

        //append child
        document.body.appendChild(confirmModel);
        confirmModel.appendChild(modalDialog);
        modalDialog.appendChild(modalBox);
        modalBox.appendChild(modalHeader);
        modalHeader.appendChild(heading);
        modalHeader.appendChild(close);
        modalBox.appendChild(modalBody);
        modalBody.appendChild(para);
        modalBody.appendChild(subBtn);
    }

    /* delete data */
    deleteData(target) {
        if (target.classList.contains('remove-item')) {
            UI.modalBox('Are you sure?', 'You want to delete this record?', 'Delete Record', 'danger-btn');
    
            const modalContent = document.getElementById('confirmMessage');
            const trIndex = target.parentElement.parentElement.rowIndex - 1;
    
            //confirm message
            modalContent.addEventListener('click', function(e) {
                if (e.target.id === 'submit') {
                    setTimeout(function() {
                        target.parentElement.parentElement.remove();
                    }, 500)
                }
                e.preventDefault();
            })
        }
    }
}

/* instantiate UI */
const ui = new UI();