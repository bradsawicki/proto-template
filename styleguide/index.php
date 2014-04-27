<?php include $_SERVER['DOCUMENT_ROOT'].'/views/header-style.php'; ?>
	
<section class="colors">
    <div class="wrapper">

        <h1 class="title-section">Colors</h1>
        
        <div class="grid list-colors">
            
            <div class="col-1-4">
                <div class="color-swatch red"></div>
                <div class="color-info">
                    <p class="label">Red</p>
                    <p class="color-hex">#232343</p>
                </div>
            </div>

            <div class="col-1-4">
                <div class="color-swatch blue"></div>
                <div class="color-info">
                    <p class="label">Blue</p>
                    <p class="color-hex">#232343</p>
                </div>
            </div>

            <div class="col-1-4">
                <div class="color-swatch green"></div>
                <div class="color-info">
                    <p class="label">Green</p>
                    <p class="color-hex">#232343</p>
                </div>
            </div>

            <div class="col-1-4">
                <div class="color-swatch orange"></div>
                <div class="color-info">
                    <p class="label">Orange</p>
                    <p class="color-hex">#232343</p>
                </div>
            </div>
            
        </div>

    </div>
</section>

<section class="typography">
    <div class="wrapper">
        
        <h1 class="title-section">Typography</h1>

        <h2 class="title-sub-section">Font Families</h2>

        <div class="item">
            <p class="label">Sans Serif</p>
            <p>Source Sans Pro - <a href="http://google.com/fonts/specimen/Source+Sans+Pro">Google Fonts</a></p>
        </div>
        
        <h2 class="title-sub-section">Headlines</h2>
        
        <div class="item">
            <p class="label">42px</p>
            <h1>Headline One</h1>
        </div>
        
        <div class="item">
            <p class="label">32px</p>
            <h2>Headline Two</h2>
        </div>

        <div class="item">
            <p class="label">24px</p>
            <h3>Headline Three</h3>
        </div>
        
        <div class="item">
            <p class="label">18px</p>
            <h4>Headline Four</h4>
        </div>        

        <div class="item">
            <p class="label">16px</p>
            <h5>Headline Five</h5>
        </div>
                
        <h2 class="title-sub-section">Paragraphs</h2>

        <div class="item">
            <p class="label">16px / 24px</p>
            <p>Donec tristique, felis hendrerit blandit consectetur, lectus risus semper nibh, ac faucibus ligula diam a turpis. Nunc ac dapibus nunc, sit amet posuere erat. Curabitur faucibus ipsum a dolor tempor, laoreet dictum ipsum aliquam. Donec dignissim velit diam, eget tincidunt odio feugiat ac. Suspendisse eu risus sit amet nibh eleifend hendrerit id ac risus. In scelerisque condimentum vestibulum. Curabitur pellentesque nulla nec sapien dapibus laoreet. Vestibulum vitae augue consectetur, auctor massa at, vulputate magna. Nam et mollis enim. Donec dapibus rutrum enim ut varius. Morbi elementum est id semper vestibulum.</p>
        </div>
    
        <h2 class="title-sub-section">Lists</h2>
        
        <div class="item body">
            <p class="label">Unordered List</p>
            <ul>
                <li>List Item One</li>
                <li>List Item One</li>
                <li>List Item One</li>
                <li>List Item One</li>
            </ul>
        </div>

        <div class="item body">
            <p class="label">Ordered List</p>
            <ol>
                <li>List Item One</li>
                <li>List Item One</li>
                <li>List Item One</li>
                <li>List Item One</li>
            </ol>
        </div>

    </div>
</section>

<section class="forms">
    <div class="wrapper">
    
        <h1 class="title-section">Forms</h1>
        
        <h2 class="title-sub-section">Example</h2>

        <form>
            <div class="form-item">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" id="email">
            </div>
            <div class="form-item">
                <label for="message">Message</label>
                <textarea id="message"></textarea>
            </div>
            <div class="form-item">
                <button class="btn">Submit</button>
            </div>
        </form>
    

    </div>
</section>

<section class="buttons">
    <div class="wrapper">
    
        <h1 class="title-section">Buttons</h1>
    
        <div class="item">
            <p class="label">Default Button</p>
            <a href="" class="btn">Say Hello!</a>
            <a href="" class="btn green">Say Hello!</a>
            <a href="" class="btn red">Say Hello!</a>
            <a href="" class="btn orange">Say Hello!</a>
        </div>

        <div class="item">
            <p class="label">Large Button</p>
            <a href="" class="btn btn-large">Say Hello!</a>
        </div>

    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/views/footer.php'; ?>