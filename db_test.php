<?php
// ### Terms of Use ###
// The Cloud Manager is distributed as is under the creative commons license CC BY 3.0
// (Attribution 3.0 Unported) for free.
// You are free to share, copy, redistribute or edit it for any purpose, even commercially
// under the following terms: You must give appropriate credit, provide a link to the
// license, and indicate if changes were made. You may do so in any reasonable manner,
// but not in any way that suggests the licensor endorses you or your use.
// 
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
// INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
// PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
// ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
// OTHER DEALINGS IN THE SOFTWARE.

	try {
	
		echo "<h1>Cloud Manager - Database Test</h1>";

		echo "<h3>Open database <b>rmmv.sqlite</b>...</h3>";
		
		$db = new PDO('sqlite:rmmv.sqlite');
		// Throw exceptions on error
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		print_r($db);
		
		echo "<br>Read table <b>savegames</b>...<br>";		
		print_r($db->query("SELECT * FROM savegames")->fetchAll());

		echo "<br>Read table <b>sessiondata</b>...<br>";
		print_r($db->query("SELECT * FROM sessiondata")->fetchAll());
		
		echo "<br>Read table <b>sessions</b>...<br>";
		print_r($db->query("SELECT * FROM sessions")->fetchAll());		

		$db = NULL;
		
		echo "<br>done.<br>";
	
	} catch(PDOException $e) {
		print 'Exception : '.$e->getMessage();
	}
?>