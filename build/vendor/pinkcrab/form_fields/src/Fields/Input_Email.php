<?php

declare (strict_types=1);
/**
 * Email Input
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 * @package PinkCrab\Form_Fields
 */
namespace PcLocations_001\PinkCrab\Form_Fields\Fields;

use PcLocations_001\PinkCrab\Form_Fields\Traits\Multiple;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Text;
class Input_Email extends \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Text
{
    /**
     * Allow use of Multiple input.
     */
    use Multiple;
    /**
     * The field type.
     *
     * @var string
     */
    protected $type = 'input';
    /**
     * Sets the input type
     *
     * @var string
     */
    protected $input_type = 'email';
    /**
     * Returns the input HTML
     *
     * @return string
     */
    public function generate_field_html() : string
    {
        return <<<HTML
<input type="{$this->input_type}" {$this->render_class()}name="{$this->get_key()}" id="{$this->get_key()}"{$this->render_attributes()} {$this->render_disabled()}{$this->render_multiple()}/>
HTML;
    }
}
