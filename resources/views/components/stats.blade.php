<div class="bg-gray-50 my-12 px-4 text-center sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Vertrauen bei über 20 Unternehmen</h2>
        <p class="mt-3 text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.</p>
      </div>
    </div>
    <div id="stats" class="mt-10 bg-white ">
      <div class="relative">
        <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-4xl mx-auto">
            <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
              <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Vermittlungen</dt>
                <dd class="order-1 text-5xl font-extrabold text-indigo-600"><span data-target="1000" class="countup">0</span>+</dd>
              </div>
              <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Kandidaten</dt>
                <dd class="order-1 text-5xl font-extrabold text-indigo-600"><span data-target="2450" class="countup">0</span>+</dd>
              </div>
              <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Unternehmen</dt>
                <dd class="order-1 text-5xl font-extrabold text-indigo-600"><span data-target="250" class="countup">0</span>+</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {


        const animateNumbers = () => {
            const counters = document.querySelectorAll('.countup');

            counters.forEach((counter) => {
                const updateCount = () => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const count = parseInt(counter.innerText);
                    const increment = target < 1000 ? 2 : 4

                    if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 5);
                    } else {
                    counter.innerText = target;
                    }
                };
                updateCount();
            });
        }

        var isInViewport = function (elem) {
	        var distance = elem.getBoundingClientRect();
	        return (
		        distance.top >= 0 &&
		        distance.left >= 0 &&
		        distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    		    distance.right <= (window.innerWidth || document.documentElement.clientWidth)
	        );
        };

        var statsSection = document.querySelector('#stats');

        window.addEventListener('scroll', function (event) {
            if (isInViewport(statsSection)) {
                animateNumbers();
            }
        }, false);

    });
</script>
